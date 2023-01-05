<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rms</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
            <a href="" class="navbar-brand">RMS</a>

            <form action="{{route('search')}}" class="d-flex">
                <input type="text" class="form-control" name="search" placeholder="Enter Roll no">
                <input type="submit" class="btn btn-success">
            </form>
        </div>
    </nav>
<div class="container mt-3">
    <div class="row">
        <div class="col-6 mx-auto">
            <a href="#"onClick="window.print();" class="btn btn-warning d-print-none">Print</a>
            <table class="table table-bordered ">
                <tr>
                    <th colspan="4" class="text-center">Personal details</th>
                </tr>
                <tr>
                    <th colspan="2">Name</th>
                    <th colspan="2">{{$student->name}}</th>
                </tr>
                <tr>
                    <th colspan="2">Contact</th>
                    <th colspan="2">{{$student->contact}}</th>
                </tr>
                <tr>
                    <th colspan="4" class="text-center">Marks Details</th>
                </tr>
                <tr>
                    <th>Subject Name</th>
                    <th>Total Marks</th>
                    <th>Pass Marks</th>
                    <th>Obtained Marks</th>
                </tr>
                <tr>
                    <td>math</td>
                    <td>100</td>
                    <td>30</td>
                    <td>{{$student->maths}}</td>
                </tr>
                <tr>
                    <td>sci</td>
                    <td>100</td>
                    <td>30</td>
                    <td>{{$student->sci}}</td>
                </tr>
                <tr>
                    <td>sst</td>
                    <td>100</td>
                    <td>30</td>
                    <td>{{$student->sst}}</td>
                </tr>
                <tr>
                    <td>english</td>
                    <td>100</td>
                    <td>30</td>
                    <td>{{$student->eng}}</td>
                </tr>
                <tr>
                    <td>hindi</td>
                    <td>100</td>
                    <td>30</td>
                    <td>{{$student->hindi}}</td>
                </tr>
                <tr>
                    <th colspan="4">Result Details</th>
                </tr>
                <tr>
                    <th colspan="2">Total Marks</th>
                    <td>
                        @php
                        echo $total = $student->math + $student->sci + $student->sst + $student->hindi +$student->eng;
                        @endphp
                    </td>
                </tr>
            </table>
        </div>
    </div>

</div>
</body>
</html>