@extends('layout')


@section('current')

    <h2>Current</h2>
    <table class="table table-hover" style="margin-top: 20px">
        <tbody>
        @forelse($todos as $todo)
        <tr>
            <th scope="row">
                <form  class="myform" action="{{ route('todo.update', $todo->id) }}" method="post">
                    @csrf
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch{{ $todo->id }}" {{ $todo->complete ? 'checked' : '' }}>
                        <label class="custom-control-label" for="customSwitch{{ $todo->id }}" onclick = 'this.form.submit();'></label>
                    </div>
                </form>
            </th>
            <td>
                <p class="{{ $todo->complete ? 'checked' : ''}}">{{ $todo->title }}</p>
            </td>
            <td>
                <form action="{{ route('todo.destroy',$todo->id) }}" method="post" style="display: initial">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-outline-danger" value="x">
                </form>
            </td>
        </tr>
        @empty
            <p class="text-center">No todo</p>
        @endforelse
        </tbody>
    </table>
@endsection

@section('done')
    <h2>Done</h2>
    <table class="table table-hover">
        <tbody>
        @forelse($todosDone as $todoDone)
            <tr class="table-primary">
                <td><p class="{{ $todoDone->complete ? 'checked' : ''}}">{{ $todoDone->title }}</p></td>
                <td>
                    <form action="{{ route('todo.destroy',$todoDone->id) }}" method="post" style="display: initial">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-outline-danger" value="x">
                    </form>
                </td>
            </tr>
        @empty
            <p class="text-center">No todo</p>
        @endforelse
        </tbody>
    </table>
@endsection
