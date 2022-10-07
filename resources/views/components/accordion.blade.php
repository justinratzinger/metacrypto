
    <div class="accordion-item mb-3">

      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $accordionId }}"  >
          <span class="h2">{{ $accordionTitle }}</span>
        </button>
      </h2>

      <div id="{{ $accordionId }}" class="accordion-collapse collapse" >
        <div class="accordion-body">
            {{ $slot }}
        </div>
      </div>

    </div>
