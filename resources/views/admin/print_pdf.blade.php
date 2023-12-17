<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
   </head>
   <body>
    <div class="form-group">
        <p align="center"><b>data user</b></p>
        <!-- <table class="static" align="center" rules="all" border="2px" style="width: 95%;">
        
        </table> -->
        <table class="static" align="center" rules="all" border="2px" style="width: 95%;">
            <thead class="small text-uppercase bg-body">
                <tr>
                    <th>nama lengkap</th>
                    <th>alamat email</th>
                    <th>phone</th>
                    <th>Name</th>
                    <th>address</th>
                    <th>nationality</th>
                    <th>tempat lahir</th>
                    <th>tanggal lahir</th>
                    <th>gender</th>
                    <th>agama</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $user)
                <tr class="align-middle">
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->nationality}}</td>
                    <td>{{$user->tempat_lahir}}</td>
                    <td>{{$user->tanggal_lahir}}</td>
                    <td>{{$user->gender}}</td>
                    <td>{{$user->religion}}</td>
                    <td>
                        <span class="badge fs-6 fw-normal bg-tint-success text-success">{{$user->payment_status}}</span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   </body>
</html>