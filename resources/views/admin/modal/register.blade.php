<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi || Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="border-radius: 20px; box-shadow: 0px 10px 20px -3px #A18AFF;">
                    <div class="card-header p-3"
                        style="background-color: #6E56CF; color: #ffff; border-radius: 20px 20px 0px 0px; font-size: 18px;">
                        <strong>Register</strong></div>

                    <div class="card-body">
                        <form method="POST" action="">
                            <input type="hidden" name="_token" value="">
                            <div class="row mb-1">
                                <label for="email" class="col col-form-label text-md-center"><strong>
                                        <h4>Buat User Baru</h4>
                                    </strong></label>
                            </div>
                            <div class="row text-center mt-4">
                                <!-- name username password -->
                                <div class="col">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control"
                                        style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                                </div>

                                <div class="col">
                                    <label for="">Username</label>
                                    <input type="text" class="form-control"
                                        style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                                </div>

                                <div class="col">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                                </div>
                                <!-- end name username password -->
                            </div>
                            <div class="row text-center mt-4">
                                <!-- address gender status -->
                                <div class="col-lg-8">
                                    <label for="">Address</label>
                                    <input type="text" class="form-control"
                                        style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                                </div>

                                <div class="col-lg-2">
                                    <label for="disabledSelect" class="form-label">Gender</label>
                                    <select id="disabledSelect" class="form-select"
                                        style="border-radius: 10px; background-color: #F4F4F4; border-style: none;">
                                        <option>L/P</option>
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>

                                <div class="col-lg-2">
                                    <label for="">Status</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                                </div>
                                <!-- end address gender status -->
                            </div>
                            <div class="row text-center mt-4">
                                <!-- name username password -->
                                <div class="col">
                                    <label for="">Role_id</label>
                                    <input type="text" class="form-control"
                                        style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                                </div>

                                <div class="col">
                                    <label for="">Group_id</label>
                                    <input type="text" class="form-control"
                                        style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                                </div>

                                <div class="col">
                                    <label for="">Office_id</label>
                                    <input type="text" class="form-control"
                                        style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                                </div>

                                <div class="col">
                                    <label for="">Position_id</label>
                                    <input type="text" class="form-control"
                                        style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                                </div>
                                <!-- end name username password -->
                            </div>
                            <div class="row text-center mt-4">
                                <!-- name username password -->
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn"
                                        style="background-color: #6E56CF; color: #fff; width: 100%;">
                                        Submit
                                    </button>
                                </div>
                                <!-- end name username password -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
