<label class="{{$class ?? null }}">
    <span class="{{ $label ?? $input ?? "ERRO" }}"></span>
    {!! Form::password($input, $attributes) !!}
</label>    