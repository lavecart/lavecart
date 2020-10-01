<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Category List
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div class="container w-full mx-auto px-2">
                    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded mb-5">
                        <inertia-link href="/add-category">
                            Add Category
                        </inertia-link>
                    </button>
                    <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

                        <table class="table-fixed w-full">
                        <thead class="w-full bg-gray-300">
                            <tr class="text-left">
                                <th class="w-1/4 px-4 py-2 border border-gray-600">Name</th>
                                <th class="w-1/4 px-4 py-2 border border-gray-600">Status</th>
                                <th class="w-1/4 px-4 py-2 border border-gray-600">Number of Products</th>
                                <th class="w-1/4 px-4 py-2 border border-gray-600">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">Men</td>
                                <td class="border px-4 py-2">Active</td>
                                <td class="border px-4 py-2">10</td>
                                <td class="border px-4 py-2">
                                    <div class="flex">
                                        <img class="flex-initial w-6" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNDc3Ljg3MyA0NzcuODczIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0NzcuODczIDQ3Ny44NzM7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMzkyLjUzMywyMzguOTM3Yy05LjQyNiwwLTE3LjA2Nyw3LjY0MS0xNy4wNjcsMTcuMDY3VjQyNi42N2MwLDkuNDI2LTcuNjQxLDE3LjA2Ny0xNy4wNjcsMTcuMDY3SDUxLjINCgkJCWMtOS40MjYsMC0xNy4wNjctNy42NDEtMTcuMDY3LTE3LjA2N1Y4NS4zMzdjMC05LjQyNiw3LjY0MS0xNy4wNjcsMTcuMDY3LTE3LjA2N0gyNTZjOS40MjYsMCwxNy4wNjctNy42NDEsMTcuMDY3LTE3LjA2Nw0KCQkJUzI2NS40MjYsMzQuMTM3LDI1NiwzNC4xMzdINTEuMkMyMi45MjMsMzQuMTM3LDAsNTcuMDYsMCw4NS4zMzdWNDI2LjY3YzAsMjguMjc3LDIyLjkyMyw1MS4yLDUxLjIsNTEuMmgzMDcuMg0KCQkJYzI4LjI3NywwLDUxLjItMjIuOTIzLDUxLjItNTEuMlYyNTYuMDAzQzQwOS42LDI0Ni41NzgsNDAxLjk1OSwyMzguOTM3LDM5Mi41MzMsMjM4LjkzN3oiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTQ1OC43NDIsMTkuMTQyYy0xMi4yNTQtMTIuMjU2LTI4Ljg3NS0xOS4xNC00Ni4yMDYtMTkuMTM4Yy0xNy4zNDEtMC4wNS0zMy45NzksNi44NDYtNDYuMTk5LDE5LjE0OUwxNDEuNTM0LDI0My45MzcNCgkJCWMtMS44NjUsMS44NzktMy4yNzIsNC4xNjMtNC4xMTMsNi42NzNsLTM0LjEzMywxMDIuNGMtMi45NzksOC45NDMsMS44NTYsMTguNjA3LDEwLjc5OSwyMS41ODUNCgkJCWMxLjczNSwwLjU3OCwzLjU1MiwwLjg3Myw1LjM4LDAuODc1YzEuODMyLTAuMDAzLDMuNjUzLTAuMjk3LDUuMzkzLTAuODdsMTAyLjQtMzQuMTMzYzIuNTE1LTAuODQsNC44LTIuMjU0LDYuNjczLTQuMTMNCgkJCWwyMjQuODAyLTIyNC44MDJDNDg0LjI1LDg2LjAyMyw0ODQuMjUzLDQ0LjY1Nyw0NTguNzQyLDE5LjE0MnoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />
                                        <img class="flex-initial w-6" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSItNjQgMCA1MTIgNTEyIiB3aWR0aD0iNTEycHQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTI1NiA4MGgtMzJ2LTQ4aC02NHY0OGgtMzJ2LTgwaDEyOHptMCAwIiBmaWxsPSIjNjI4MDhjIi8+PHBhdGggZD0ibTMwNCA1MTJoLTIyNGMtMjYuNTA3ODEyIDAtNDgtMjEuNDkyMTg4LTQ4LTQ4di0zMzZoMzIwdjMzNmMwIDI2LjUwNzgxMi0yMS40OTIxODggNDgtNDggNDh6bTAgMCIgZmlsbD0iI2U3NmU1NCIvPjxwYXRoIGQ9Im0zODQgMTYwaC0zODR2LTY0YzAtMTcuNjcxODc1IDE0LjMyODEyNS0zMiAzMi0zMmgzMjBjMTcuNjcxODc1IDAgMzIgMTQuMzI4MTI1IDMyIDMyem0wIDAiIGZpbGw9IiM3Nzk1OWUiLz48cGF0aCBkPSJtMjYwIDI2MGMtNi4yNDYwOTQtNi4yNDYwOTQtMTYuMzc1LTYuMjQ2MDk0LTIyLjYyNSAwbC00MS4zNzUgNDEuMzc1LTQxLjM3NS00MS4zNzVjLTYuMjUtNi4yNDYwOTQtMTYuMzc4OTA2LTYuMjQ2MDk0LTIyLjYyNSAwcy02LjI0NjA5NCAxNi4zNzUgMCAyMi42MjVsNDEuMzc1IDQxLjM3NS00MS4zNzUgNDEuMzc1Yy02LjI0NjA5NCA2LjI1LTYuMjQ2MDk0IDE2LjM3ODkwNiAwIDIyLjYyNXMxNi4zNzUgNi4yNDYwOTQgMjIuNjI1IDBsNDEuMzc1LTQxLjM3NSA0MS4zNzUgNDEuMzc1YzYuMjUgNi4yNDYwOTQgMTYuMzc4OTA2IDYuMjQ2MDk0IDIyLjYyNSAwczYuMjQ2MDk0LTE2LjM3NSAwLTIyLjYyNWwtNDEuMzc1LTQxLjM3NSA0MS4zNzUtNDEuMzc1YzYuMjQ2MDk0LTYuMjUgNi4yNDYwOTQtMTYuMzc4OTA2IDAtMjIuNjI1em0wIDAiIGZpbGw9IiNmZmYiLz48L3N2Zz4=" />
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from './../../../Layouts/AppLayout'

export default {

    components: {
        AppLayout,
    },

    methods: {
        initCategoryDataTable() {}
    },
    
    mounted() {
        this.initCategoryDataTable();
    }
}
</script>
<style scoped>

</style>
