{{--<a href="{{ route('admin.users.delete',bcrypt($user->user_id)) }}"><i class="fa fa-trash">X</i></a>--}}
{{--<a href="{{ route('admin.users.edit',bcrypt($user->user_id)) }}"><i class="fa fa-edit">E</i></a>--}}

<a href="{{ route('admin.users.delete',$user->user_id) }}"><i class="fa fa-trash">X</i></a>
<a href="{{ route('admin.users.edit',$user->user_id) }}"><i class="fa fa-edit">E</i></a>