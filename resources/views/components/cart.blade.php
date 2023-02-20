@props(['size' => 28, 'color' => 'gray'])

@php
    switch ($color) {
        case 'gray':
            # code...
            $col = '#374151';
            break;
        case 'white':
            # code...
            $col = '#ffffff';
            break;
        default:
            # code...
            break;
    }
@endphp
<img style="width: {{$size}}px;height:{{$size}}px" class="flex items-center" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAADy0lEQVR4nO1ZS4gUVxS94yeCKDEkG7OJDOgiq4AbJYnxA4ludKG9kIwBg1S/++6tqXtrHMwiUhCzUFDwv/GDCG5cZB0EN66MWwkaiIogJkiycREU4oc37XS9aXv8dJdVNfP6wIWm3qtL1elT9/cABhhggAEG6A9E6QrDOo6ke3xz19wazHYg6y1kfdbVSP6EoAlgfQazHc3R0eWGZS+y7M8tIAK6YUAA+3FganCsypqsTWvHPoEygK+ICVWaIXmCJEeyLJtXaWCsgR2vIDBWZ4b0AJJe8Qh4am3yGYSELMvmIMslLzb9BKEBSXZ7BJyB0GBYzrYDIsvPEBKiKJqPJP9OEmBtugFCguFkU54O9cE7T4V1lj+ynOypxe1mM6Ht7ZQ/xrqu2EKm5m2vtbrxreSPs4wAl/K8cvhEoZWcYdnr9kON5W9Y/5kkoEnJWggJ1pM/kv7daDTmQkhAT/7vvAmqu/wx1q8gJBhKvvFK37+Ck78hOe1lqmMQErIsm+dyfl77J2u67RtC0p3O3O8uTuYYKzv6mcW5+50fKBkYy9evlT+yjrTzYyzfdln/rpBZnJUdZb249+yncgL0aNdNlpPtryJg4t8vZgY3AhXK37B8Oe1m60ggiab7BFoq6WcmpyNlfwK+/JH0fhWfYKXokP9hCAlZh/ybLJ9DSEBf/iz3wpM/6eVg5W9IdvmHH8147FMIAVEULTSsP06c/eUEnCv7OYZcuWlZtLxTX9mHLBddn98xofo9SZIlpb05ogwb1msFFU39VZ2s1yKRpaW9fBSlHyHp3apf3EV8pDR1MwAoE4blUJt90ketFrSkU1+WzNgUI0pWV3bQgaR3PAK2QmhAkseTBFhrF0FoQE8BNpZtEBpMRwyYmMIWm+piE+uq2pa0UVlZgOS6tekXUEcgyjCS/FYCCY8NpZuhphhqV4LFprsLSPLQI+Eh0fjHEBKaSbLMkNz2SDgIocFQutkj4AbU+ROwzlpz+JfmjL0iiva871rcVraR/6BOwGmaoYlrKMO9+HN1fee93rDjV5gxaZD0rtvzxv5ElrpJ7ot7b/prcRwvwNGxlY0sew/qAtOlGWqZPuolaLkzvFxB8kfneu0OOHGaZsiVxfl1uf0W/tpqMizrp6yxnm9NfWQ/1L0Z+n58fLGvjB78/e//24g/fJAHQX0AdW+GkNNGjwrI/VnZkvtT65fFUOdmyLCc7TUG+P5aapALyPLLlIEnyT6YSVmAiD4syp9TU6kDz76aIXet5zrgZX+G9aori6GmGCq4Epzi78URd2GVpcNzjT8GNYOf/+gAAAAASUVORK5CYII=">
