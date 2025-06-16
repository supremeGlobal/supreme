<section id="productService">
     <div class="container-fluid px-5">
         <div class="text-center">
             <h2 class="fw-bold">{{$heading ?? ''}}</h2>
         </div>
         @foreach ($contents->where('order', $order)->values() as $index => $item)
             <div class="row mb-5 border shadow rounded-2 overflow-hidden {{ $index % 2 != 0 ? 'bg-cyan' : '' }} fs-5">
                 <div class="d-lg-flex w-100 align-items-stretch px-0">
                     @if ($index % 2 == 0)
                         <!-- Even: Image Left -->
                         <div class="col-lg-4 p-0">
                             <div class="h-100">
                                 <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['title'] }}" class="w-100 h-100 object-fit-cover" />
                             </div>
                         </div>
                         <div class="col-lg-8 px-4 py-3 d-flex flex-column justify-content-start">
                             <h3 class="fw-bold">{{ $item['title'] }}</h3>
                             <p class="text-muted fs-5">{!! $item['details'] !!}</p>
                         </div>
                     @else
                         <!-- Odd: Image Right -->
                         <div class="col-lg-8 px-4 py-3 d-flex flex-column justify-content-start order-2 order-lg-1">
                             <h3 class="fw-bold">{{ $item['title'] }}</h3>
                             <p class="text-muted fs-5">{!! $item['details'] !!}</p>
                         </div>
                         <div class="col-lg-4 p-0 order-1 order-lg-2">
                             <div class="h-100">
                                 <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['title'] }}" class="w-100 h-100 object-fit-cover" />
                             </div>
                         </div>
                     @endif
                 </div>
             </div>
         @endforeach
     </div>
</section>