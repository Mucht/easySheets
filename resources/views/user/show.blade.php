@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="page_title">
        {{ __('profile.showTitle') }}
    </h1>
    <div class="profile_content">
        <div class="profile_avatar_container">
            <div class="profile_avatar">
                <div class="avatar avatar-big avatar-border avatar-shadow">
                    <img src="{{ $user->avatar }}" alt="Avatar Image" class="avatar_img">
                </div>
            </div>
            <a class="profile_link profile_link-edit" href={{ route('profileEdit', ['user' => $user]) }} name="{{ __('profile.editTitle') }}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                    <path d="M49.4,52.4c-8.9,0-16.1-7.2-16.1-16.1s7.2-16.1,16.1-16.1c8.9,0,16.1,7.2,16.1,16.1S58.3,52.4,49.4,52.4z M49.4,26.3   c-5.5,0-10.1,4.5-10.1,10.1s4.5,10.1,10.1,10.1s10.1-4.5,10.1-10.1S55,26.3,49.4,26.3z"/>
                    <path d="M32.2,93.8c-0.4,0-0.8-0.1-1.2-0.2C14,86.2,3,69.5,3,50.9C3,25.3,23.8,4.4,49.4,4.4c18.5,0,35.3,11,42.7,28   c0.7,1.5,0,3.3-1.6,3.9c-1.5,0.7-3.3,0-3.9-1.6c-6.4-14.8-21-24.4-37.1-24.4C27.1,10.4,9,28.6,9,50.9C9,67.1,18.6,81.6,33.4,88   c1.5,0.7,2.2,2.4,1.6,3.9C34.5,93.1,33.4,93.8,32.2,93.8z"/>
                    <path d="M49.2,95.7l-0.4,0c-2.6,0-4.8-2.1-4.8-4.8l0-0.4l3.4-13.7c0.1-1.7,0.7-3.1,1.8-4.2l28.5-28.5C81,41,87,42.4,92.2,47.6   c2.1,2.1,3.8,4.6,4.6,7c1,3,0.6,5.8-1.1,7.5L67.1,90.6c-1.1,1.1-2.5,1.7-4.2,1.8L49.2,95.7z M53.5,76.9c0,0,0,0.1,0,0.4l0,0.4   l-2.9,11.5l11.5-2.9l0.4,0c0.3,0,0.4-0.1,0.4-0.1l28.4-28.4c0.2-0.7-0.6-3.3-3.3-6.1c-2.8-2.8-5.4-3.5-6.1-3.3L53.5,76.9L53.5,76.9   z"/>
                    <path d="M28.2,77c-0.5,0-1.1-0.1-1.6-0.5c-1.4-0.9-1.8-2.7-1-4.1c5.2-8.3,14.1-13.3,23.8-13.3c4.1,0,8,0.9,11.7,2.6   c1.5,0.7,2.2,2.5,1.5,4c-0.7,1.5-2.5,2.2-4,1.5c-2.9-1.3-6-2-9.1-2c-7.6,0-14.6,3.9-18.7,10.5C30.1,76.5,29.2,77,28.2,77z"/>
                </svg>
                {{ __('profile.editTitle') }}
            </a>
        </div>
        <div class="profile_info">
            <box-component title="{{ __('auth.name') }}">
                <p>{{ $user->name }}</p>
            </box-component>
            <box-component title="{{ __('auth.email') }}">
                <p>{{ $user->email }}</p>
            </box-component>
            <box-component title="{{ __('profile.creationDate') }}">
                <p>{{ $user->creationDate }}</p>
            </box-component>
            <box-component title="{{ __('profile.updatedDate') }}">
                <p>{{ $user->updatedDate }}</p>
            </box-component>
        </div>
    </div>
</div>
@endsection
