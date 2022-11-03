<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1>Players List</h1>
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">@sortablelink('id', '#')</th>
                    <th scope="col">@sortablelink('name', 'Name')</th>
                    <th scope="col">@sortablelink('address', 'Address')</th>
                    <th scope="col">Retired</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($players as $player)
                    <tr>
                        <th scope="row">{{ $player->id }}</th>
                        <td>{{ $player->name }}</td>
                        <td>{{ $player->address }}</td>
                        <td class="text-center">
                            @if($player->retired)
                                <i class="bi bi-emoji-laughing-fill text-primary"></i>
                            @else
                                <i class="bi bi-emoji-angry-fill text-danger"></i>
                            @endif
                        </td>
                        <td>
                            <a href="{{url('players/' . $player->id)}}" type="button"
                               class="btn btn-success">Show</a>
                            <a href="{{url('players/' . $player->id . '/edit')}}" type="button"
                               class="btn btn-primary">Edit</a>
                            <form class="d-inline" action="{{url('players/' . $player->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $players->links() }}
{{--            {!! $players->appends(Request::except('page'))->render() !!}--}}
        </div>
    </div>
</div>
