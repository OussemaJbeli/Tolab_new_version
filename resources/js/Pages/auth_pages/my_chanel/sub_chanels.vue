<!-- ////////////////// temlate///////////// -->
<template>
    <ChanelLayout>
        <Head title="طلاب" />
        <div class="list_chaine" v-if="subscrib_chanel">
            <div class="master_table_info p-4 w-100">
                        <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                            <span class="h3 text-black">قائمة المشتركين</span>
                        </div>
                        <div class="overflow-x-scroll">
                            <DataTable class="display DataTable3">
                                <thead>
                                    <tr class="text-center font-bold bg-green-900">
                                        <th class="pb-4 pt-6 px-6 text-start text-white">الإسم</th>
                                        <th class="pb-4 pt-6 px-6 text-start text-white">البريد الالكتروني</th>
                                    </tr>
                                </thead>   
                                <tbody class="text-right">
                                    <tr v-for="subscriber in subscrib_chanel" class="hover:bg-yellow-400 bg-green-300">
                                        <td class="pb-4 pt-6 px-6 border-t text-end text-black">
                                            {{ subscriber.name }}
                                        </td>
                                        <td class="pb-4 pt-6 px-6 border-t text-end text-black">
                                            {{ subscriber.email }}
                                        </td>
                                    </tr>
                                </tbody>
                            </DataTable>
                        </div>
                    </div>
        </div> 
        <div class="pont_subscribe" v-else>
            انت لست مشترك في اي قنات
        </div>
    </ChanelLayout>
</template>
<script setup>
import ChanelLayout from '@/Pages/auth_pages/my_chanel/index.vue';
import { Head, Link} from '@inertiajs/vue3';
//datatabel
import DataTable from 'datatables.net-vue3';
import DataTablesCore from 'datatables.net';

DataTable.use(DataTablesCore);
</script>

<script>
export default {
    components: {
        Head,
        Link,
        DataTable,
    },
    props: {
        subscrib_chanel:Object,
    },

    data() {
        return {
            
        }
    },
    methods: {
        
    },
}
</script>
<style>
@import 'datatables.net-dt';
</style>