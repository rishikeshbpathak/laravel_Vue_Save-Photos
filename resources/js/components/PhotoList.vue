<template>
    <div>
        <table class="table">
            <thead>
              <tr class="text-center text-capitalize">
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">email</th>
                <th scope="col">phone</th>
                <th scope="col">role</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                 <tr class="text-center text-capitalize" v-for="(photo,index) in photo" :key="photo.id">
                    <td>{{ index+1 }}</td>
                    <td>{{ photo.title }}</td>
                    <td>{{ photo.url }}</td>
                    <td>{{ photo.id }}</td>
                    <td>
                      <div class="row gap-3">
                        <!-- <router-link :to="`/photo/${photo.id}`" class="p-2 col border btn btn-primary">View</router-link> -->
                        <router-link :to="`/photo/${photo.id}/edit`" class="p-2 col border btn btn-success">Edit</router-link>
                        <button @click="deletephoto(photo.id)" type="button" class="p-2 col border btn btn-danger">Delete</button>
                      </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      photo: []
    }
  },
  async created() {
    try {
      const response = await axios.get('/api/photo');
      this.photo = response.data;
    } catch (error) {
      console.error(error);
    }
  },
  methods: {
    async deletephoto(id) {
      try {
        await axios.delete(`/api/photo/${id}`);
        this.photo = this.photo.filter(photo => photo.id !== id);
      } catch (error) {
        console.error(error);
      }
    }
  }
}
</script>
