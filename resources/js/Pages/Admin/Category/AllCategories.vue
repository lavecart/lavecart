<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Category
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">
                    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                        
                        <table id="example">
                            <thead>
                                <tr>
                                    <th data-priority="1">Name</th>
                                    <th data-priority="2">Position</th>
                                    <th data-priority="3">Office</th>
                                    <th data-priority="4">Age</th>
                                    <th data-priority="5">Start date</th>
                                    <th data-priority="6">Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tina May</td>
                                    <td>Coffee Manager</td>
                                    <td>Ljubljana</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                
                                <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->
                                
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
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
    props: ['sessions'],

    components: {
        AppLayout,
    },

    methods: {
        initCategoryDataTable() {
            var table = $('#example').DataTable( {
                responsive: true
            } )
            .columns.adjust()
            .responsive.recalc();
        }
    },
    
    mounted() {
        this.initCategoryDataTable();
    }
}
</script>
<style scoped>

</style>
