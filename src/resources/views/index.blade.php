@extends('layouts.app')
    @section('content')
        <div class="content">
            <div class="content__title">
                <h2>お問合せ</h2>
            </div>
        <form class="form" action="/contacts/confirm" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                    <span class="form__label--required">※ 必須</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="name" placeholder="例：山田 太郎" value="{{ old('name') }}" />
                    </div>
                    <div class="form__error">
                        @error('name')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="form__group-title">
                    <span class="form__label--item">電話番号</span>
                    <span class="form__label--required">※ 必須</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="tel" name="tel" placeholder="例：09012345678" value="{{ old('tel') }}" />
                    </div>
                    <div class="form__error">
                        @error('tel')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="form__group-title">
                    <span class="form__label--item">お問合せ内容</span>
                    <span class="form__label--required">※ 必須</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--textarea">
                        <textarea name="content" placeholder="例：お問合せ内容記載" >{{ old('content') }}</textarea>
                    </div>
                    <div class="form__error">
                        @error('content')
                        {{$message}}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">内容確認</button>
            </div>
        </form>
        </div>
    @endsection
