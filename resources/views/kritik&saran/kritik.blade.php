<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.flip-card{
	background-color: #FFFFFF;
    width: 90%;
    hight: 100%;
    margin: 0px 10px 0px 70px;
    padding: 50px 0px 20px 0px;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 80%;
  border-radius: 5px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
}

.center {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
}

body {
    background-color: #F7F7F7;
}

.container img {
      margin: auto;
      float: none;
      display: block;
  }

  .container img {
  float: left;
  margin-Top: 5 px;
  margin-right: 20px;
  border-radius: 50%;
}

.container span {
  font-size: 12px;
  margin-right: 15px;
}
.row {margin: 0 -5px;}

p {
   line-height:5px;
}

.time-right {
  float: right;
  color: #aaa;
}

h2 {
   margin-bottom: 50px;
}
</style>

</head>
<body>
<div class="body">
<div class="center">
<h2>Riview Kritik Dan Saran</h2>
</div>
@foreach ($kritik_dan_saran as $kritik)
<div class="flip-card">
<div class="center">
<div class="card">
  <div class="container">
  <div class="row">
  <img src='{{ url('storage/FotoProfil.jpg') }}' alt="Avatar" style="width:50px">
  <span class="time-right">{{ $kritik->created_at }}</span>
  <p><span>{{ $kritik->nama }}</span></p>
  <p><span>{{ $kritik->email }}</span></p>
  <p><span>{{ $kritik->no_hp }}</span></p>
    <h3>{{ $kritik->isi_pesan }}</h3> 
  </div>
  </div>
  </div>
</div>
</div>
</div>
</div>
@endforeach
</body>
</html> 
