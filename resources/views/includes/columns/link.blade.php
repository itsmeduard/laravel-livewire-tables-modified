{{--<a href="{{ $path }}" {!! count($attributes) ? $column->arrayToAttributes($attributes) : '' !!} --}}{{--wire:click="show({{ $row->id }})"--}}{{-->{{ $title }}</a>--}} {{--This code is the old one that I modified based on my needs--}}
<a class='btn btn-{{ $title }} btn-icon-split' role='button' href='{{ $path }}' {!! count($attributes) ? $column->arrayToAttributes($attributes) : '' !!} data-bs-toggle='modal' wire:click="show_item({{ $id }})" style='background: rgba(255,255,255,0);border-radius: 0px;border-width: 0px;border-style: none;'>
    @if($title == 'success')
        <i class='fas fa-pencil-alt' style='color: rgb(58,196,125);'></i>
    @else
        <i class='fas fa-trash-alt' style='color: #d92550;'></i>
    @endif
</a>
