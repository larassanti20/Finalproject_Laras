<!DOCTYPE html>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        let table = new DataTable('#dt-suhu', {
            pageLength : 5,
            lengthMenu: [[5, 10, 20, 25], [5, 10, 20, 25]],
            order: [[0, 'desc']],
            ajax: function (d, cb) {
                fetch('api/suhu.php')
                    .then(response => response.json())
                    .then(data => cb(data));
            },
            columns: [
                { data: 'time_update' },
                { data: 'nilai_suhu' },
                { data: 'kondisi_mesin' }
                
            ],
            "columnDefs": [
                {"targets": "_all",
                    "className": "dt-center"
                },
                {"targets" : [ 3 ],
                    render : function (data, type, row) {
                        if(row.kondisi_mesin == 1){
                        return '<button class="btn btn-warning btn-block"><strong><i class="fa fa-droplet"></i> BAHAYA!</strong></button>';
                        }else{
                        return '<button class="btn btn-success btn-block"><strong><i class="fa fa-check"></i> AMAN</strong></button>';
                        }
                    }
            }]
        } );
    } );
    
    // function reloadDatatable () {
    //     $('#dt-mq2').DataTable().ajax.reload();
    // }; 
    // setInterval( reloadDatatable , 2000 );
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<title>SISTEM MONITORING PENDETEKSI KERUSAKAN SEPEDA MOTOR</title>
    <meta http-equiv="refresh" content="600">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <style>
        #dt-suhu {
            font-size: 14px !important;
        }
       
    </style>
</head>

<body>
<div class="container-fluid">
    <br>
    <br>
    <p id="judul"><i class="bi-thermometer-half"></i> Data Suhu</p>
    <table id="dt-suhu" class="table table-striped table-hover" style="width:100%">
        <thead>
            <tr>
                <th class="dt-center">No</th>
                <th class="dt-center">Nilai Suhu</th>
                <th class="dt-center">Kondisi Mesin</th>
                <th class="dt-center">Tanggal & Waktu</th>
            </tr>
        </thead>
        <tbody>
            <tr class="odd">
                <td colspan="6" class="dataTables_empty" valign="top">Loading...</td>
        </tbody>
        
    </table>
</div>

<script>
    $(document).ready(function() {
        selesai();
    });

    function selesai() {
        setTimeout(function() {
            update();
            selesai();
        }, 500);
    }

    function update() {
        $.getJSON("api/suhu.php", function(data) {
            $("tbody").empty();
            var no = 1; 
            $.each(data.data, function() {
                $("tbody").append("<tr><td>"+(no++)+"</td><td>"+this['nilai_suhu']+"</td><td>"+this['kondisi_mesin']+"</td>"+"<td>"+this['time_update']+"</td></tr>");
            });
        });
    } 
</script>

</html>