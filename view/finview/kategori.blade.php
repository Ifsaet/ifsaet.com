@extends('layout')
@section('content')
<section class="feature feature--tertiary section mt-5">
    <h1 class="text-center">Marka Kategorileri</h1>
    <div class="container mt-4">
        <div class="row g-3 g-sm-2 g-md-3 g-xxl-4">
               @unempty($kategori)
                    @php
                        $data = $kategori->getPaginatedData();
                    @endphp
                   @foreach($data as $item)
                   <div class="col-12 col-sm-6 col-xl-4">
                       <div class="card card--custom wow fadeInUp" data-wow-duration="0.8s">                         
                           <div class="card__content">
                               <h4 class="card__title"><a href="{{$item["slug"]}}">{{$item["name"]}}</a></h4>
                               <a href="{{$item["slug"]}}" class="btn_theme social_box"><i class="bi bi-arrow-up-right"></i><span></span></a>                            
                           </div>
                       </div>
                   </div>
                   @endforeach
               @else
                       <div class="alert-success"><h1 class="text-center">Marka Bulunamadı</h1></div>
               @endif
        </div>
        <div class="row">
               <div class="col-12">
                   <nav aria-label="Page navigation" class="nav_pagination" data-wow-duration="0.8s">
                       <ul class="pagination">
                           @php
                            $nowpage = $kategori->getCurrentPage();
                           @endphp
                           @if($nowpage > 1)
                               <li class="page-item">
                                   <a class="page-link" href="{{ ($kategori->getCurrentPage() != 1 ? $kategori->getPrevButton() : '') }}">
                                       <span class="prev-icon"></span>
                                   </a>
                               </li>
                           @endif
                           @php
                                $lastPage = $kategori->getTotalPages();
                             @endphp
                           @for($i = 1; $i <= $lastPage ; $i++)
                               <li class="page-item">
                                   <a class="page-link {{ $nowpage == $i ? 'active' : '' }}" href="{{ $kategori->getUrl($i) }}">{{ $i }}</a>
                               </li>
                           @endfor
                           @if($nowpage < $lastPage)
                               <li class="page-item">
                                   <a class="page-link" href="{{ $kategori->getNextButton() }}">
                                       <span class="next-icon"></span>
                                   </a>
                               </li>
                           @endif
                       </ul>
                   </nav>
               </div>
        </div>
    </div>
</section>
@endsection

