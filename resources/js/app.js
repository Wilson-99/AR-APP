import './bootstrap';
import DataTable from 'datatables.net-dt';
//import 'datatables.net-responsive-dt';
import 'datatables.net-dt/css/jquery.dataTables.css';

let table = new DataTable('#tenantTable', {
    //dom: '<"top"i>rt<"bottom"flp><"clear">',
    lengthMenu: [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, 'All']
    ]
});

//dom: '<"top"iflp<"clear">>rt<"bottom"iflp<"clear">>',
