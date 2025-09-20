<td class="center" width="5%">
    <input type="checkbox" class="js-switch status" 
		data-model="{{ class_basename($item) }}" data-id="{{ $item->id }}"
        {{ $item->status == 'active' ? 'checked' : '' }} />
</td>