<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    private $raw_class = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->raw_class = [
            'uppercase',
            // 'shadow-sm',
            'border',
            'rounded-md',
            'font-semibold',
            'text-sm',
            'focus:outline-none',
            'focus:shadow-outline-gray',
            'disabled:opacity-25',
            'transition',
            'ease-in-out',
            'duration-150',
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.button');
    }

    public function class()
    {
        $this->raw_class[] = $this->attributes['outlined'] ? $this->outlined_color() : $this->color();
        $this->raw_class[] = $this->attributes['block'] ? 'w-full' : '';
        $this->raw_class[] = $this->icon();
        $this->raw_class[] = $this->attributes['class'] ? $this->attributes['class'] : '';

        return implode(' ',  $this->raw_class);
    }

    public function tag()
    {
        return $this->attributes['href'] ? 'a' : 'button';
    }

    private function color()
    {
        switch ($this->attributes['color']) {
            case 'primary':
                return 'border-transparent text-white bg-primary hover:bg-primary-600 active:bg-primary-600 focus:bg-primary-700 focus:border-gray-900';
                break;
            case 'warning':
                return 'border-transparent bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-600 focus:bg-yellow-700 focus:border-gray-900';
                break;
            case 'error':
                return 'border-transparent text-white bg-red-500 hover:bg-red-600 active:bg-red-600 focus:bg-red-700 focus:border-gray-900';
                break;
            case 'white':
                return 'border-transparent text-gray-800 bg-white hover:bg-gray-200 active:bg-gray-100 focus:bg-gray-200 focus:border-gray-900';
                break;
            case 'transparent':
                return 'border-transparent text-gray-800 bg-transparent hover:text-gray-600 active:text-gray-700 focus:text-gray-600';
                break;
            case 'transparent-dark':
                return 'border-transparent text-white bg-transparent hover:text-gray-100 active:text-gray-200 focus:text-gray-100';
                break;
            default:
                # code...
                return 'border-transparent text-white bg-gray-800 hover:bg-gray-700 active:bg-gray focus:bg-gray-900 focus:border-gray-900';
                break;
        }
    }

    private function icon()
    {
        if ($this->attributes['icon']) {
            unset($this->attributes['icon']);
            return 'h-10 w-10';
        }
        return 'px-2 pt-3 pb-2';
    }

    private function outlined_color()
    {
        unset($this->attributes['outlined']);

        $class = 'bg-transparent hover:bg-gray-50 active:bg-gray-100 focus:bg-gray-100 ';

        switch ($this->attributes['color']) {
            case 'primary':
                $class .= 'border-primary text-primary focus:border-primary-300';
                break;
            default:
                $class .= 'border-gray-800 text-gray-800 focus:border-gray-900';
                break;
        }

        return $class;
    }
}
