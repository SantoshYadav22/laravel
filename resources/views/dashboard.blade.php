<style>
    .Details{
        padding-top:10px;
        font-color: white;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role='alert'>

        <strong>{{ session('success')}} </strong>
        <button type="button" class="close" date-dismiss='alert' aria-label='Close'>
            <span aria-hidden="true">&times;</span>
        </button>

    </div>
    @endif
            
            <div>



               <table class="table">
  <thead>
    <tr>
        <th scope="col">Sr No.</th>
      <th scope="col">NAME</th>
      <th scope="col">ROLL NO.</th>
      <th scope="col">STD</th>
      <th scope="col">DIV</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  
                           
                    <tbody>
                        @foreach ($fmdata as $list)           
                        <tr>
                    
                        <th scope="row" >{{ $list->id }}</th >
                        <th scope="row" >{{ $list->name }}</th >
                        <td>{{ $list->rollno }}</td>
                        <td>{{ $list->std }}</td>
                        <td>{{ $list->div }}</td>
                        <td> <a href="{{url('list/edit/'.$list->id)}}"><button class="btn btn-primary">Update</button></a></td>
                        <td> <a href="{{ url('list/delete/'.$list->id)}}"><button class="btn btn-danger">Deletes</button></a></td>
                   
                    </tr> 
                </tbody>
                @endforeach
                {{ $fmdata->links('pagination::bootstrap-4')}}
            </table>
            
           
           
        </div>
            </div>
            
   
        <div class='Details'>
            <a href="./addmem"><button class="btn btn-primary">Add Details</button></a>
            <a href="{{ route('UpdateController.createPDF') }}"><button class="btn btn-primary">PDF Create</button></a>
            <a href="{{ route('UpdateController.export') }}"><button class="btn btn-primary">Excel Create</button></a>

            </div>

    </div>
    </div>
</x-app-layout>

