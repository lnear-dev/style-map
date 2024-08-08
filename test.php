<?php

require_once 'styleMap.php';


describe('styleMap', function () {
    it('should return a string of CSS styles', function () {
        $styles = styleMap(fontFamily: 'Arial', fontSize: '12px', CustomColor: '#000000');
        expect($styles)->toBe('font-family: Arial; font-size: 12px; --custom-color: #000000;');
    });

    it('should return a string of CSS styles', function () {
        $styles = styleMap(font_family: 'Arial', font_size: '12px', CustomColor: '#000000');
        expect($styles)->toBe('font-family: Arial; font-size: 12px; --custom-color: #000000;');
    });

    it('should return a string of CSS styles', function () {
        $styles = styleMap(...['fontFamily' => 'Arial', 'fontSize' => '12px', 'CustomColor' => '#000000']);
        expect($styles)->toBe('font-family: Arial; font-size: 12px; --custom-color: #000000;');
    });

    it('should return a string of CSS styles', function () {
        $styles = styleMap(fontFamily: 'Arial', fontSize: '12px', CustomColor: '#000000', backgroundColor: 'red');
        expect($styles)->toBe('font-family: Arial; font-size: 12px; --custom-color: #000000; background-color: red;');
    });

});