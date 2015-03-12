@extends('layout.default')



@section('content')

  



    <!--FORM-->
    <section id='add-object'>
        <div class="container">
            <h3>გამოგვიგზავნეთ თქვნი ობიექტი</h3>
            <br>
            <div class="col-lg-6">
                {{Form::open(array('url' => 'add_restaurant'))}}
                <input name="username" type="text" class="form-control-1" placeholder="თქვენი სახელი..."><br>
                <input name="name" type="text" class="form-control-1" placeholder="ობიექტის დასახელება"><br>
                <input name="phone" type="text" class="form-control-1" placeholder="საკონტაქტო ტელეფონი..."><br>
                <input name="email" type="text" class="form-control-1" placeholder="ელ.ფოსტა"><br>

                <div class="filter-selectors" style="margin-left:-15px;">
                    <select name="type" class="selectpicker" title="ობიექტის ტიპი" >
                        <option>ბარი</option>
                        <option>რესტორანი</option>
                        <option>კაფე</option>
                        <option>სწრაფი კვება</option>
                    </select>
                </div>

                <div class="filter-selectors">
                    <select name="adress" class="selectpicker" title="მდებარეობა">
                        <option>ვარკეთილი</option>
                        <option>ისანი</option>
                        <option>სამგორი</option>
                        <option>ავლაბარი</option>
                        <option>რუსთაველი</option>
                        <option>თავისუფლება</option>
                        <option>ახმეტელი</option>
                        <option>დიდუბე</option>
                        <option>ღრმაღელე</option>
                    </select>
                </div>


            </div>

            <div class="col-lg-6">

                <textarea name="info" style="margin-left:13px;"  placeholder="მოკლე ინფორმაცია" id="textarea" rows="7"></textarea>
                <input type="submit" name="submit"  class="btn btn-md btn-success" style="margin-left:28px; margin-top:20px;" value="გაგზავნა">

            </div>
            {{Form::close()}}
        </div>
    </section>
    <!--/FORM-->

@stop