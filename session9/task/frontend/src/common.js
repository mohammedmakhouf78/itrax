export default {
  data() {
    return {};
  },
  methods: {
    async callApi(method, url, dataObj) {
      try {
        return await this.$axios({
          method: method,
          url: url,
          data: dataObj,
        });
      } catch (error) {
        return error.response;
      }
    },
  },
};
