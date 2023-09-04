<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-success','data-bs-toggle'=>'modal', 'data-bs-target'=>'#mainModal']) }}>
    {{ $slot }}
</button>