
<div class="table-responsive mailbox-messages">

    <table class="table table-hover table-striped" id="datatable">
      <tbody>
        <tr>
            <th>
            <div class="icheck-primary">
                <input type="checkbox" value="" id="check1">
                <label for="check1"></label>
            </div>
            </th>
            <th class="mailbox-star">Id</th>
            <th class="mailbox-star">Picture</th>
            <th class="mailbox-name">First Name</th>
            <th class="mailbox-name">Last Name</th>
            <th class="mailbox-star">Phone Number</th>
            <th class="mailbox-star">Email</th>
            <th class="mailbox-star">Role</th>
            <th class="mailbox-name">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>
            <div class="icheck-primary">
                <input type="checkbox" value="" id="check1">
                <label for="check1"></label>
            </div>
            </td>
            <td class="mailbox-star">{{ $user->id }}</td>
            <td class="mailbox-star"><img src="{{ asset('users') }}/{{ $user->piture }}"
                style="max-width:60px; max-heigth:100px;" /></td>
            <td class="mailbox-name">{{ $user->fisrtname }}</td>
            <td class="mailbox-name">{{ $user->lastname }}</td>
            <td class="mailbox-name">{{ $user->phone }}</td>
            <td class="mailbox-name">{{ $user->email }}</td>
            <td class="mailbox-name">{{ $user->role }}</td>
            <td>
             <div class="row">
                    <a class=" btn btn-default btn-sm" data-toggle="modal"
                    data-target="#updateusers{{ $user->id }}"
                    {{ route('user.edit', $user->id) }}><i  class="far fa-edit"></i></a>

                <button type="button" class="btn btn-default btn-sm"><i class="far fa-eye"></i></button>
                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are sure you want to delete it ?')"><i class="far fa-trash-alt"></i></button>
                </form>
            </div>
            </td>
        </tr>
        @include('users.update')
        @endforeach

      </tbody>
    </table>
    <!-- /.table -->
  </div>
