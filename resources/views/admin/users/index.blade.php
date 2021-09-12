
<div class="row">
    <div class="col-12">
        <h1 class="float-left">Users</h1>
        <a class="btn btn-sm btn-success float-right" href="{{route('admin.users.create')}}"_role="button">create</a>
    </div>
</div>


<div class="card" >
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">email</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{route('admin.users.edit', $user->id)}}"_role="button">edit</a>
                        <button type="button" class="btn btn-sm btn-danger"
                            onclick="event.preventDefault();
                            document.getElementById('delete-user-form-{{$user->id}}').submit()">
                            DELETE
                        </button>
                        <form id="delete-user-form-{{$user->id}}" action="{{ route('admin.users.destroy',$user->id)}}" method="POST" STYLE="display:none">
                            @csrf
                            @method("DELETE")
                        </form>

                    </td>
                </tr>
  
            @endforeach        
        </tbody>
      </table>
      {{$users->links()}}
</div>