<label class="{{$class ?? null }}">
    <span class="{{ $label ?? $input ?? "ERRO" }}"></span>
    {!! Form::text($input, $value ?? null, $attributes) !!}
</label>    