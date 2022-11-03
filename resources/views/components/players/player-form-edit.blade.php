<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1>Edit Player</h1>
            <form method="POST" action="{{ url('players/' . $player->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        autocomplete="name"
                        placeholder="Type your name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ $player->name }}"
                        required
                        aria-describedby="nameHelp">
                    <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input
                        type="text"
                        id="address"
                        name="address"
                        autocomplete="street-address"
                        placeholder="Type your address"
                        class="form-control @error('address') is-invalid @enderror"
                        value="{{ $player->address }}"
                        required
                    >
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea
                        name="description"
                        id="description"
                        autocomplete="on"
                        placeholder="Type your description"
                        class="form-control @error('description') is-invalid @enderror"
                        required
                        cols="30"
                        rows="10">{{$player->description}}
                    </textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <p>Retired</p>
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="retired"
                            id="retired1"
                            value="1"
                            required
                            @if($player->retired == 1) checked
                            @endif
                        >
                        <label class="form-check-label" for="retired1">
                            Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="retired"
                            id="retired0"
                            value="0"
                            @if($player->retired == 0) checked
                            @endif
                        >
                        <label class="form-check-label" for="retired0">
                            No
                        </label>
                    </div>
                    @error('retired')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
