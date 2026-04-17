<div class="form-group row">
    <label class="col-3">{{ $text }}</label>
    <div class="col-9">
        <div class="input-group input-group-solid">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="{{ $icon }}"></i>
                </span>
            </div>
            {{ $slot }}
        </div>
        <span class="form-text text-muted">{{ $keterangan }}</span>
    </div>
</div>
