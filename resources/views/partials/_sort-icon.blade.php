@if($sortBy !== $field)
<i class="text-muted fa fa-sort"></i>
@elseif($sortDirection == 'asc')
<i class="color:rgbs(38, 38, 236, 0.774)" class="fas fa-caret-down"></i>
@else 
<i class="color:rgbs(38, 38, 236, 0.774)" class="fas fa-caret-up"></i>
@endif