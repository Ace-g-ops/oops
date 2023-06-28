@extends('backend.layout.master')

@section('main_content')

    <!-- Our Dashbord -->
    <section class="our-dashbord dashbord bgc-f7 pb50">


        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
                <div class="col-sm-12 col-lg-8 col-xl-10 maxw100flex-992">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="my_dashboard_review mb40">
                                <div class="favorite_item_list">
                                    @if($properties->count() > 0)
                                        @foreach($properties as $item)

                                            <div class="feat_property list favorite_page mt30">
                                                <div class="thumb">
                                                    <img class="img-whp" src="{{asset('/img_uploads/'.$item->image)}}" alt="fp1.jpg">
                                                    <div class="thmb_cntnt">
                                                        <ul class="tag mb0">
                                                            <li class="list-inline-item dn"></li>
                                                            <li class="list-inline-item"><a href="#">{{$item->status}}</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="details">
                                                    <div class="tc_content">
                                                        <h4>{{$item->prop_type}}</h4>
                                                        <p><span class="flaticon-placeholder"></span> {{$item->address}}</p>
                                                        <a class="fp_price text-thm" href="#">${{$item->price}}<small></small></a>
                                                    </div>
                                                </div>
                                                <ul class="view_edit_delete_list mb0 mt35">
                                                    <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <form action="{{route('property.destroy', $item->id)}}" method="post">
                                                            @csrf

                                                            @method('delete')

                                                            <button class="btn">
                                                                <a><span class="flaticon-garbage"></span></a>
                                                            </button>
                                                        </form>
                                                    </li>

                                                    <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit"><a href="{{route('property.edit', $item->id)}}"><span class="flaticon-edit" style="color: green"></span> </a></li>
                                                </ul>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt10">
                        <div class="col-lg-12">
                            <div class="copyright-widget text-center">
                                <p>© 2020 Find House. Made with love.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection