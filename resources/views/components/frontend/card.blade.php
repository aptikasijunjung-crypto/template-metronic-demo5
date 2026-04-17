<div class="card card-custom gutter-b card-stretch">

    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">{{ $title }}</span>
            <span class="text-muted mt-3 font-weight-bold font-size-sm">{{ $desc }}</span>
        </h3>
        <div class="card-toolbar">
            {{ $kanan }}
        </div>
    </div>

    <div class="card-body pt-0">{{ $slot }}</div>


</div>
