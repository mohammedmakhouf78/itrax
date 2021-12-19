<template lang="">
  <div class="card">
    <div class="image">
      <img :src="path" alt="" />
    </div>
    <div class="body">
      <div class="header">
        <div class="date">
          <i class="far fa-calendar-alt"></i>
          {{ post.name }}
        </div>
        <div class="date">
          <i class="far fa-calendar-alt"></i>
          {{ post.published_at }}
        </div>
      </div>
      <h3>{{ post.title }}</h3>
      <p>
        {{ post.description }}
      </p>
      <div class="btn-con">
        <button @click="showSingleBlog(post.id)" class="btn">
          Read More <i class="fas fa-chevron-right"></i>
        </button>
        <!-- <button v-if="loggedIn" class="btn update-btn" @click="modalShow=!modalShow">
                    <i class="fas fa-pen"></i>
                </button>
                <button v-if="loggedIn" @click="deleteBlog(post.id)" class="btn delete">
                    <i class="fas fa-trash"></i>
                </button> -->
      </div>
    </div>

    <div class="create-modal" v-if="modalShow">
      <div class="bg">
        <button class="btn close" @click="modalShow = !modalShow">X</button>
        <form @submit="submit" method="POST">
          <div class="form-control">
            <label for="title">
              <i class="fas fa-user"></i>
            </label>
            <input
              v-model="myPost.title"
              type="text"
              id="title"
              placeholder="Post Title"
            />
          </div>
          <div class="form-control">
            <label for="description">
              <i class="fas fa-user"></i>
            </label>
            <input
              v-model="myPost.description"
              type="text"
              id="description"
              placeholder="Post Description"
            />
          </div>
          <div class="form-control">
            <input type="file" @change="handleFileUpload($event)" />
          </div>
          <div class="form-control">
            <img :src="path" alt="" />
          </div>
          <button class="btn">Update</button>
        </form>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: ["post"],
  data() {
    return {
      myPost: {
        id: this.post.id,
        description: this.post.description,
        file: this.post.image,
        title: this.post.title,
        name: this.post.name,
        published_at: this.post.published_at,
      },
      modalShow: false,
      myfile: "",
    };
  },
  computed: {
    path: function() {
      return require(`../assets/blogs/${this.myFile}`);
    },
    myFile: function() {
      return this.post.image;
    },
    updatedBlog: function() {
      return {
        id: this.myPost.id,
        description: this.myPost.description,
        image: this.myfile.name,
        title: this.myPost.title,
        name: this.myPost.name,
        published_at: this.myPost.published_at,
      };
    },
  },
  methods: {
    submit: function(e) {
      e.preventDefault();
      if (this.myPost.title == "") {
        this.message.msg = "Please enter the post title";
        this.error();
        return;
      } else if (this.myPost.description == "") {
        this.message.msg = "Please enter the post description";
        this.error();
        return;
      } else if (this.myPost.file == "") {
        this.message.msg = "Please select the image";
        this.error();
        return;
      }

      let formData = new FormData();
      formData.append("id", this.myPost.id);
      formData.append("file", this.myfile);
      formData.append("description", this.myPost.description);
      formData.append("title", this.myPost.title);

      this.$axios
        .post("UpdateBlog.php", formData, {
          header: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((res) => {
          if (res.data.success) {
            this.message.msg = "Your post was successfully published";
            this.success();
            this.modalShow = false;
            this.$emit("updateBlog", this.updatedBlog);
          } else {
            this.message.msg = "Sorry Try again";
            this.error();
            console.log(res);
            this.resetMyPost();
          }
        })
        .catch((err) => {
          this.message.msg = "There was an error";
          this.error();
          console.log(err);
          this.resetMyPost();
        });
    },
    deleteBlog(id) {
      let formData = new FormData();
      formData.append("id", id);
      this.$axios
        .post("DeletePost.php", formData)
        .then((res) => {
          if (res.data.success) {
            this.message.msg = "Your post was successfully Deleted";
            this.success();
            this.$emit("deleteBlog", id);
          } else {
            this.message.msg = "Sorry Try again";
            this.error();
            console.log(res);
          }
        })
        .catch((err) => {
          this.message.msg = "There was an error";
          this.error();
          console.log(err);
        });
    },
    handleFileUpload: function(e) {
      this.myfile = e.target.files[0];
    },
    resetMyPost() {
      this.myPost = {
        id: this.post.id,
        description: this.post.description,
        file: this.post.image,
        title: this.post.title,
        name: this.post.name,
        published_at: this.post.published_at,
      };
    },
    showSingleBlog: function(id) {
      this.$router.push({ path: `/singleBlog/${id}` });
    },
  },
};
</script>
<style scoped>
.card {
  width: 30%;
  max-width: 30%;
  border-radius: 9px;
  border: 1px solid #eaecec;
  box-shadow: 0px 9px 25px 0px #dadee0;
  transition: all 0.25s ease-in-out;
  padding: 0em;
}

.body {
  padding: 2em 1em;
}

.header {
  display: flex;
  justify-content: space-between;
}

.date {
  font-size: 12px;
  color: var(--light-gray);
}

.date .far {
  color: var(--light-blue);
  margin-right: 0.5em;
}

img {
  width: 100%;
  height: 225px;
  object-fit: cover;
  border-radius: 9px 9px 0px 0px;
}

h3 {
  font-weight: bold;
  font-size: 25px;
  color: var(--dark-blue);
  margin: 60px 0px 30px 0px;
}

.btn-con {
  display: flex;
  justify-content: space-between;
}

.btn-con .btn {
  font-size: 14px;
}

.update-btn {
  background-color: var(--success);
}

.btn.delete {
  background-color: var(--danger);
}

@media only screen and (max-width: 1070px) {
  .card {
    width: 45%;
    max-width: 45%;
    margin-bottom: 2em;
  }
}

@media only screen and (max-width: 770px) {
  .card {
    width: 90%;
    max-width: 95%;
  }
}
</style>
