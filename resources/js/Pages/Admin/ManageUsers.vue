<script>
import AdminPanelLayout from '@/Layouts/AdminPanelLayout.vue';

export default {
    components: {
        AdminPanelLayout
    },
  data() {
    return {
      searchQuery: '',
      users: [] // from db
    }
  },
  computed: {
    filteredUsers() {
      return this.users.filter(user =>
        user.name.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
        user.email.toLowerCase().includes(this.searchQuery.toLowerCase())
      )
    }
  }
}
</script>

<template>
    <AdminPanelLayout>
        <div class="border-b border-gray-200 p-4 bg-white">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-semibold text-gray-800">User Management</h1>
                <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                    Add User
                </button>
            </div>
        </div>

        <div class="p-6">
            <div class="bg-white rounded-lg border border-gray-200">
                <div class="p-4 border-b border-gray-200">
                    <input
                    type="text"
                    placeholder="Search users..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500"
                    v-model="searchQuery"
                    >
                </div>

                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Name</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Email</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Role</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr v-for="user in filteredUsers" :key="user.id">
                            <td class="px-6 py-4 text-sm text-gray-700">{{ user.name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ user.email }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ user.role }}</td>
                            <td class="px-6 py-4">
                                <button class="text-green-600 hover:text-green-800 mr-4">Edit</button>
                                <button class="text-red-600 hover:text-red-800">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AdminPanelLayout>
</template>
