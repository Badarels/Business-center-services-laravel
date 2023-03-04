<div>
    @if($currentPages==PAGECREATEFORM)
        @include("livewire.utilisateurs.create")
    @endif
    @if ($currentPages==PAGEEDITFORM)
        @include("livewire.utilisateurs.edit")
    @endif
     @if($currentPages==PAGELIST)
         @include("livewire.utilisateurs.utilisateur")
    @endif
     @if($currentPages==PAGEROLE)
         @include("livewire.utilisateurs.role")
    @endif
</div>