@extends('layouts.app')
@section('content')
<div class="cofirm__content">
            <div class="confirm__logo">
                <h2>お問合せ内容確認</h2>
            </div>
            <form class="form" action="/contacts" method="post">
                @csrf
                <div class="confirm-table">
                    <table class="confirm-table__inner">
                        <tr class="confirm-table__now">
                            <th class="confirm-table__logo">お名前</th>
                            <td class="confirm-table__text">
                                <input type="text" name="name" value=" {{ $contact['name'] }} " readonly />
                            </td>
                        </tr>
                    <tr class="confirm-table__now">
                            <th class="confirm-table__logo">電話番号</th>
                            <td class="confirm-table__text">
                                <input type="tel" name="tel" value=" {{ $contact['tel'] }} " readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__now">
                            <th class="confirm-table__logo">お問合せ内容</th>
                            <td class="confirm-table__text">
                                <input type="text" name="content" value=" {{ $contact['content'] }} " readonly />
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="form__button">
                    <button class="form__button-submit">送る</button>
                </div>
                <div>
                    <a href="/">修正</a>
                </div>
            </form>
            <!-- <form class="form" action="/" method="post">
                @csrf
                    <button type="submit">修正</button>
            </form> -->
        </div>
@endsection
