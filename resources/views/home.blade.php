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
   <div class="container mt-2">
       <div class="row">
           <div class="col-3">
               @if(session("msg"))
               <div class="alert alert-success">
                   {{session("msg")}}
               </div>
               @endif
               <div class="card">
                   <div class="card-body">
                       <form action="<?= route('store');?>" method="post">
                       @csrf
                           <div class="mb-2">
                               <label for="">Name</label>
                               <input type="text" name="name" class="form-control" value="{{old('name')}}">
                               @error("name")
                               <p class="text-danger">{{$message}}</p>
                               @enderror
                           </div>
                           <div class="mb-2">
                               <label for="">contact</label>
                               <input type="text" name="contact" class="form-control" value="{{old('contact')}}">
                               @error("contact")
                               <p class="text-danger">{{$message}}</p>
                               @enderror
                            </div>
                            <div class="mb-2">
                               <label for="">math</label>
                               <input type="text" name="math" class="form-control"value="{{old('math')}}">
                               @error("math")
                               <p class="text-danger">{{$message}}</p>
                               @enderror
                           </div>
                           <div class="mb-2">
                               <label for="">sci</label>
                               <input type="text" name="sci" class="form-control"value="{{old('sci')}}">
                               @error("sci")
                               <p class="text-danger">{{$message}}</p>
                               @enderror
                           </div>
                           <div class="mb-2">
                               <label for="">sst</label>
                               <input type="text" name="sst" class="form-control"value="{{old('sst')}}">
                               @error("sst")
                               <p class="text-danger">{{$message}}</p>
                               @enderror
                           </div>
                           <div class="mb-2">
                               <label for="">eng</label>
                               <input type="text" name="eng" class="form-control"value="{{old('eng')}}">
                               @error("eng")
                               <p class="text-danger">{{$message}}</p>
                               @enderror
                           </div>
                           <div class="mb-2">
                               <label for="">hindi</label>
                               <input type="text" name="hindi" class="form-control"value="{{old('hindi')}}">
                               @error("hindi")
                               <p class="text-danger">{{$message}}</p>
                               @enderror
                           </div>
                           <div class="mb-2">
                               <input type="submit" class="btn btn-danger w-100">
                           </div>
                       </form>
                   </div>
               </div>
           </div>
           <div class="col-9">
           @if(session("error"))
               <div class="alert alert-danger">
                   {{session("error")}}
               </div>
               @endif
               <table class="table table-bordered">
                   <tr>
                       <th>id</th>
                       <th>name</th>
                       <th>contact</th>
                       <th>math</th>
                       <th>sci</th>
                       <th>sst</th>
                       <th>hindi</th>
                       <th>eng</th>
                       <th>total</th>
                       <th>action</th>
                   </tr>
                   @foreach($students as $s)
                   <tr>
                       <td>{{$s->id}}</td>
                       <td>{{$s->name}}</td>
                       <td>{{$s->contact}}</td>
                       <td>{{$s->maths}}</td>
                       <td>{{$s->sci}}</td>
                       <td>{{$s->sst}}</td>
                       <td>{{$s->hindi}}</td>
                       <td>{{$s->eng}}</td>
                       <td>
                           @php
                          echo $total = $s->math + $s->sci + $s->sst + $s->hindi +$s->eng;
                           @endphp
                       </td>
                       <td>
                           <a href="{{route('remove',['std_id'=> $s->id])}}" class="btn btn-danger btn-sm">delete</a>
                           <a href="{{route('view',['roll'=> $s->id])}}" class="btn btn-success btn-sm">view</a>
                       </td>
                   </tr>
                   @endforeach
               </table>
           </div>
       </div>
   </div> 
</body>
</html>