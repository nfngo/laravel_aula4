<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1>Show Player</h1>
            <div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        autocomplete="name"
                        placeholder="Type your name"
                        class="form-control"
                        value="{{ $player->name }}"
                        required
                        aria-describedby="nameHelp"
                        disabled
                    >
                    <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input
                        type="text"
                        id="address"
                        name="address"
                        autocomplete="street-address"
                        placeholder="Type your address"
                        class="form-control"
                        value="{{ $player->address }}"
                        required
                        disabled
                    >
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea
                        name="description"
                        id="description"
                        autocomplete="on"
                        placeholder="Type your description"
                        class="form-control"
                        required
                        disabled
                        cols="30"
                        rows="10">{{ $player->description }}
                    </textarea>
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
                            disabled
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
                            disabled
                            @if($player->retired == 0) checked
                            @endif>
                        <label class="form-check-label" for="retired0">
                            No
                        </label>
                    </div>
                </div>
                <button type="submit" class="mt-2 mb-5 btn btn-primary">Back</button>
            </div>
        </div>
    </div>
</div>
