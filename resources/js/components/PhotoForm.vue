<template>
    <div>
      <h2 v-if="isNewphoto">Add photo</h2>
      <h2 v-else>Edit photo</h2>
        <form @submit.prevent="submitForm">
          <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input class="form-control" type="text" id="title" v-model="photo.title" required />
          </div>
          <div class="mb-3">
            <label for="url" class="form-label">File:</label>

            <input class="form-control" type="text" id="file" v-model="photo.file" required />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Status:</label>
            <input class="form-control" type="text" id="status" v-model="photo.status" required />
            <!-- <select class="form-control" type="email" id="email" v-model="photo.email" required>
                <option value="enable">Show</option>
                <option value="disable">Hide</option>
            </select > -->
          </div>
          <button type="submit" v-if="isNewphoto" class="btn btn-primary">Add photo</button>
          <button type="submit" v-else class="btn btn-primary">Update photo</button>
        </form>
    </div>
  </template>

  <script>
  import axios from 'axios';

  export default {
    data() {
      return {
        photo: {
          title: '',
          url: '',
          status: 'enable'
        }
      }
    },
    computed: {
      isNewphoto() {
        return !this.$route.path.includes('edit');
      }
    },
    async created() {
      if (!this.isNewphoto) {
        const response = await axios.get(`/api/photo/${this.$route.params.id}`);
        this.photo = response.data;
      }
    },
    methods: {
      async submitForm() {
        try {
          if (this.isNewphoto) {
            await axios.post('/api/photo', this.photo);
          } else {
            await axios.put(`/api/photo/${this.$route.params.id}`, this.photo);
          }
          this.$router.push('/');
        } catch (error) {
          console.error(error);
        }
      }
    }
  }
  </script>
