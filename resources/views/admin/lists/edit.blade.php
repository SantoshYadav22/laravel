<x-app-layout>

    <x-slot name="header">
        <p class="font-semibold text-xl text-grey-800 leading-tight">
            Edit list
        </p>
    </x-slot>
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role='alert'>

        <strong>{{ session('success')}} </strong>
        <button type="button" class="close" date-dismiss='alert' aria-label='Close'>
            <span aria-hidden="true">&times;</span>
        </button>

    </div>
    @endif

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">

                        <div class="card-header">Edit List</div>

                        <div class="card-body">
                            <form action="{{ url('list/updates/'.$lists->id)}}" method='POST'
                                enctype="multipart/form-data">
                                @csrf
                               
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Edit Name</label>
                                    <input type="text" name="userNames" id="exampleInputEmail1" class="form-control"
                                        aria-describedby="emailHelp" value="{{$lists->name}}">
                                    @error('userNames')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Edit Roll No</label>
                                    <input type="number" name="userroll" id="exampleInputEmail1" class="form-control"
                                        aria-describedby="emailHelp" value="{{$lists->rollno}}">
                                    @error('userroll')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Edit Std</label>
                                    <input type="number" name="userstd" id="exampleInputEmail1" class="form-control"
                                        aria-describedby="emailHelp" value="{{$lists->std}}">
                                    @error('userstd')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Edit Div</label>
                                    <input type="text" name="userdiv" id="exampleInputEmail1" class="form-control"
                                        aria-describedby="emailHelp" value="{{$lists->div}}">
                                    @error('userdiv')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>



                               

                                <button type="submit" class="btn btn-primary">Update List</button>

                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>