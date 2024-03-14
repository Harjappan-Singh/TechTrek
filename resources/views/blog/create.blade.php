
@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-center">
    <div class="py-10 border-b border-gray-200">
        <h1 class="text-4xl text-white">
            Create Post
        </h1>
    </div>
</div>

@if ($errors->any())
    <div class="w-4/5 m-auto mt-8">
        <div class="bg-red-200 text-red-700 px-4 py-3 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-2">Oops! Something went wrong.</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="mb-1">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

<div class="w-4/5 m-auto pt-10">
    <form id="myForm" action="/blog" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" id="intro_title" name="intro_title" placeholder="Intro Title..." class="bg-gray-200 block border-b-2 w-full h-12 text-xl outline-none mb-6 px-4 rounded-lg focus:border-blue-500">

        <input type="text" id="title" name="title" placeholder="Title..." class="bg-gray-200 block border-b-2 w-full h-12 text-xl outline-none mb-6 px-4 rounded-lg focus:border-blue-500">

        <textarea name="description" id="desc" placeholder="Description....." class="bg-gray-200 py-4 px-4 w-full h-60 text-lg outline-none mb-6 rounded-lg focus:border-blue-500"></textarea>

        <div class="flex flex-col mb-8">
            <label for="tag-input1" class="text-white mb-2">Tags Input</label>
            <div class="tags-input-wrapper">
                <input type="text" id="tag-input1" class="tag-input bg-gray-200 border-b-2 w-full h-12 text-lg outline-none mb-2 px-4 rounded-lg focus:border-blue-500 ">
            </div>
        </div>

        <input type="hidden" id="tags" name="tags">

        <div class="bg-gray-lighter mb-8">
            <label for="image" class="w-44 flex flex-col items-center px-2 py-3 bg-white rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <span class="mt-2 text-base leading-normal">
                    Select a file
                </span>
                <input type="file" name="image" id="image" class="hidden">
            </label>
        </div>

        <div class="flex justify-center pt-5 pb-10">
            <button type="submit" class="uppercase bg-pink text-gray-100 text-lg font-semibold py-3 px-8 rounded-lg hover:bg-darkBlue focus:outline-none focus:bg-darkBlue">
                Create Post
            </button>
        </div>
    </form>
</div>

<script>
    (function(){
    "use strict"
    
    // Plugin Constructor
    var TagsInput = function(opts){
        this.options = Object.assign(TagsInput.defaults , opts);
        this.init();
    }
    // Initialize the plugin
    TagsInput.prototype.init = function(opts){
        this.options = opts ? Object.assign(this.options, opts) : this.options;
        if(this.initialized)
            this.destroy();
            
        if(!(this.orignal_input = document.getElementById(this.options.selector)) ){
            console.error("tags-input couldn't find an element with the specified ID");
            return this;
        }
        this.arr = [];
        this.wrapper = document.createElement('div');
        this.input = document.createElement('input');
        init(this);
        initEvents(this);
        this.initialized =  true;
        return this;
    }
    // Add Tags
TagsInput.prototype.addTag = function(string){
    if(this.anyErrors(string))
        return ;
    this.arr.push(string);
    var tagInput = this;
    var tag = document.createElement('span');
    tag.className = this.options.tagClass;
    tag.innerText = string;
    var closeIcon = document.createElement('a');
    closeIcon.innerHTML = '&times;';
    
    // delete the tag when icon is clicked
    closeIcon.addEventListener('click' , function(e){
        e.preventDefault();
        var tag = this.parentNode;
        for(var i =0 ;i < tagInput.wrapper.childNodes.length ; i++){
            if(tagInput.wrapper.childNodes[i] == tag)
                tagInput.deleteTag(tag , i);
        }
    })
    tag.appendChild(closeIcon);
    this.wrapper.insertBefore(tag , this.input);
    this.orignal_input.value = this.arr.join(',');
    // Update hidden input with tags
    updateHiddenInput(this.arr);
    return this;
}
// Delete Tags
TagsInput.prototype.deleteTag = function(tag , i){
    tag.remove();
    this.arr.splice( i , 1);
    this.orignal_input.value =  this.arr.join(',');
    // Update hidden input with tags
    updateHiddenInput(this.arr);
    return this;
}
// Function to update hidden input with tags
function updateHiddenInput(tagsArray) {
    document.getElementById('tags').value = tagsArray.join(',');
}
    // Make sure input string have no error with the plugin
    TagsInput.prototype.anyErrors = function(string){
        if( this.options.max != null && this.arr.length >= this.options.max ){
            console.log('max tags limit reached');
            return true;
        }
        
        if(!this.options.duplicate && this.arr.indexOf(string) != -1 ){
            console.log('duplicate found " '+string+' " ')
            return true;
        }
        return false;
    }
    // Add tags programmatically 
    TagsInput.prototype.addData = function(array){
        var plugin = this;
        
        array.forEach(function(string){
            plugin.addTag(string);
        })
        return this;
    }
    // Get the Input String
    TagsInput.prototype.getInputString = function(){
        return this.arr.join(',');
    }
    // destroy the plugin
    TagsInput.prototype.destroy = function(){
        this.orignal_input.removeAttribute('hidden');
        delete this.orignal_input;
        var self = this;
        
        Object.keys(this).forEach(function(key){
            if(self[key] instanceof HTMLElement)
                self[key].remove();
            
            if(key != 'options')
                delete self[key];
        });
        this.initialized = false;
    }
    // Private function to initialize the tag input plugin
    function init(tags){
        tags.wrapper.append(tags.input);
        tags.wrapper.classList.add(tags.options.wrapperClass);
        tags.orignal_input.setAttribute('hidden' , 'true');
        tags.orignal_input.parentNode.insertBefore(tags.wrapper , tags.orignal_input);
    }
    // initialize the Events
    function initEvents(tags){
        tags.wrapper.addEventListener('click' ,function(){
            tags.input.focus();           
        });
        
        tags.input.addEventListener('keydown' , function(e){
            var str = tags.input.value.trim(); 
            if( !!(~[9 , 13 , 188].indexOf( e.keyCode ))  )
            {
                e.preventDefault();
                tags.input.value = "";
                if(str != "")
                    tags.addTag(str);
            }
        });
    }
    // Set All the Default Values
    TagsInput.defaults = {
        selector : '',
        wrapperClass : 'tags-input-wrapper',
        tagClass : 'tag',
        max : null,
        duplicate: false
    }
    window.TagsInput = TagsInput;
})();
 var tagInput1 = new TagsInput({
            selector: 'tag-input1',
            duplicate : false,
            max : 10
        });
        tagInput1.addData(['PHP' , 'JavaScript' , 'CSS'])
    
    // Initialize the form
    var form = document.getElementById('myForm');
    form.addEventListener('submit', function(event) {
        // Get the tags from the TagsInput instance
        var tagsInput = document.getElementById('tag-input1').TagsInput;
        var tags = tagsInput.getInputString();
        // Update the value attribute of the input field with the current tags
        document.getElementById('tag-input1').value = tags;
        
        // You can add any other form validation or submission logic here if needed
        // For now, I'll just log the tags and submit the form
        console.log('Tags:', tags);
    });
</script>

<style>
.tags-input-wrapper{
    background: transparent;
    padding: 10px;
    border-radius: 4px;
    max-width: 400px;
    border: 1px solid #ccc
}
.tags-input-wrapper input{
    border: none;
    background: transparent;
    outline: none;
    width: 140px;
    margin-left: 8px;
    color: white
}
.tags-input-wrapper .tag{
    display: inline-block;
    background-color: #fa0e7e;
    color: white;
    border-radius: 40px;
    padding: 0px 3px 0px 7px;
    margin-right: 5px;
    margin-bottom:5px;
    box-shadow: 0 5px 15px -2px rgba(250 , 14 , 126 , .7)
}
.tags-input-wrapper .tag a {
    margin: 0 7px 3px;
    display: inline-block;
    cursor: pointer;
}
</style>

@endsection

{{-- // reference to add tags - https://codepen.io/iamqamarali/pen/qyawoR --}}