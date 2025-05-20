<html>
    <head>
        <title>JavaScript + SweetAlert</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script>
            function validasi()
            {
                var nrp = document.getElementById("nrp").value;
                var nama = document.getElementById("nama").value;

                // NRP harus diisi
                if (nrp.length == 0) 
                    {
                        // alert("NRP harus diisi");
                        swal("Coba Lagi!", "NRP harus diisi", "error");
                        document.getElementById("nrp").focus();
                        return false;
                    }

                // Nama harus diisi
                if (nama.length == 0) 
                    {
                        // alert("Nama harus diisi");
                        swal("Coba Lagi!", "Nama harus diisi", "error");
                        document.getElementById("nama").focus();
                        return false;
                    }

                // NRP harus berupa angka
                if (isNaN(nrp)) 
                    {
                        swal("Coba Lagi!", "NRP harus berupa angka semua", "error");
                        document.getElementById("nrp").focus();
                        return false;
                    }
                
                    // default nya adalah true
            } 
        </script>
    </head>
    <body>
        <div class="container">
            <p>
                <form id="frmDaftar" method="get" action="https://google.co.id" onsubmit="return validasi()">
                    NRP : 
                    <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Isikan 10 digit NRP (harus diisi)">
                    <br>
                    Nama  : 
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Isikan Nama Lengkap (harus diisi)">
                    <br>
                
                    <input type="submit" class="btn btn-success" value="Daftar">
                    <!-- kalo mau ngerefer ke same page, pake button-->
                    <!-- kalo mau ngerefer ke another server, pake input-->
                    <!-- id jatahnya js, name jatahnya server site-->
                </form>
            </p>
        </div>
    </body>
</html>