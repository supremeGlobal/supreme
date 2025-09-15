<td class="center">
    <input type="checkbox" class="js-switch status" 
		data-model="Company" data-id="{{ $item->id }}"
        {{ $item->status == 'active' ? 'checked' : '' }} />
</td>