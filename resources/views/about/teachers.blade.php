@extends("layouts/head2")
@section("main")
<style>
    td,th {
        border-top: 1px solid black;
        border-right: 1px solid black;
    }
</style>
    <div class="pdf-container" style="text-align: center; margin: 20px 200px">
        <h1>
        Мектептегі мұғалімдер статистикасы                                     
        </h1>
        <div class="teachers">
            <img src="{{asset("img/47.png")}}" alt="">
            <table class="bailanys_table" style="border-bottom: 1px solid black;" border="0" cellspacing=0 cellpadding=10>
                <thead>
                  <tr class="teachers-header">
                    <th class="teachers-col-title">Көрсеткіш</th>
                    <th class="teachers-col-value">Саны</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="teachers-total">
                    <td>Мұғалімдер саны</td>
                    <td>136</td>
                  </tr>
                  <tr class="teachers-mid-edu">
                    <td>Орта білімді мұғалімдер саны</td>
                    <td>13</td>
                  </tr>
                  <tr class="teachers-high-cat">
                    <td>Жоғары санатты мұғалімдер саны</td>
                    <td>28</td>
                  </tr>
                  <tr class="teachers-women">
                    <td>Әйел мұғалімдер саны</td>
                    <td>113</td>
                  </tr>
                  <tr class="teachers-researcher">
                    <td>Педагог-зерттеуші мұғалімдер саны</td>
                    <td>7</td>
                  </tr>
                  <tr class="teachers-first-cat">
                    <td>Бірінші санатты мұғалімдер саны</td>
                    <td>34</td>
                  </tr>
                  <tr class="teachers-men">
                    <td>Ер мұғалімдер саны</td>
                    <td>24</td>
                  </tr>
                  <tr class="teachers-expert">
                    <td>Педагог-сарапшы мұғалімдер саны</td>
                    <td>11</td>
                  </tr>
                  <tr class="teachers-second-cat">
                    <td>Екінші санатты мұғалімдер саны</td>
                    <td>31</td>
                  </tr>
                  <tr class="teachers-high-edu">
                    <td>Жоғары білімді мұғалімдер саны</td>
                    <td>124</td>
                  </tr>
                  <tr class="teachers-moderator">
                    <td>Педагог-модератор мұғалімдер саны</td>
                    <td>6</td>
                  </tr>
                  <tr class="teachers-no-cat">
                    <td>Бейсанат мұғалімдер саны</td>
                    <td>25</td>
                  </tr>
                  <tr class="teachers-master-degree">
                    <td>Магистр академиялық дәрежесі бар мұғалімдер саны</td>
                    <td>11</td>
                  </tr>
                </tbody>
            
            </table>
        </div>
          
    </div>
@endsection
