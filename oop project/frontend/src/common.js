export default {
  data() {
    return {
      message: {
        showMsg: false,
        msg: "",
        cls: "",
      },
    };
  },
  methods: {
    success: function() {
      this.message.showMsg = true;
      //   this.message.msg = "Thank you for Joinging";
      this.message.cls = "success";
      setTimeout(() => {
        this.message.showMsg = false;
      }, 2000);
    },
    error() {
      this.message.showMsg = true;
      //   this.message.msg = "There was an error";
      this.message.cls = "danger";
      setTimeout(() => {
        this.message.showMsg = false;
      }, 2000);
    },
  },
  computed: {
    loggedIn: function() {
      if (this.$store.state.loggedIn == "false") {
        return false;
      } else {
        return true;
      }
    },
  },
};
