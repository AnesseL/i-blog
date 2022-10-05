@if($pagination->total() > $pagination->perPage())

@if($pagination->currentPage() !== 1)
<a href="{{ $pagination->previousPageUrl() }}" class="prev col-5 d-flex justify-content-start text-white text-decoration-none" title="Previous">
    <i class="fa fa-caret-left"></i>
    &#171;&nbsp;Previous
</a>
@endif
@if($pagination->currentPage() === 1)
<a href="{{ $pagination->nextPageUrl() }}" class="next col-9 d-flex justify-content-end text-white text-0decoration-none" title="Previous">
    <i class="fa fa-caret-right"></i>
     Next&nbsp;&#187;
</a>
@elseif($pagination->hasMorePages())
<a href="{{ $pagination->nextPageUrl() }}" class="next col-4 d-flex justify-content-end text-white text-0decoration-none" title="Previous">
    <i class="fa fa-caret-right"></i>
     Next&nbsp;&#187;
</a>
@endif
@endif