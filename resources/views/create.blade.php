<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MR22XX UNIVERSITY</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
    }

    .ipt{
        height: 25px;
    }

    form{
        display:flex;
        flex-direction: column;
    }

    .btn{
        height: 25px;
        background-color: rgb(0, 47, 255);
        border-radius: 10px;
        margin: 3px;
        cursor: pointer;
    }
</style>
<body>

    <div style="
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
        height:100vh;
        width:100%;
        background-color:black;
        color:white;
        ">
    <h1 style="color: white;
                padding-bottom:30px;
                text-align:center;
    ">DATA MAHASISWA <span style="color: red">MR22XX</span> UNIVERSITY</h1>



    <table border="4">
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>SCORE</th>
        </tr>
        @foreach ($students as $student )
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->score}}</td>
        </tr>
        @endforeach
    </table>

<br>

@if ($errors->any())
@foreach ($errors->all() as $error )
<p>{{$error}}</p>
@endforeach
@endif

<h4 style="
    padding:20px;

">Tambah Data Disini !!!</h4>
<form action="{{route('store')}}" method="post">
    @csrf
    <input class="ipt" type="text" name="name" placeholder="name">
    <input class="ipt" type="number" name="score" placeholder="score">
    <button class="btn" type="submit">add</button>
</form>
</div>
</body>
</html>
