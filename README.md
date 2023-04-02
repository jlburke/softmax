# softmax
Softmax function for PHP.

See: https://en.wikipedia.org/wiki/Softmax_function

This function takes an array of real numbers as an input vector and returns a normalized probability distribution which sums to 1. 

I didn't see a simple softmax function for php, so I threw this together.

**Example usage:**

```
$arrSampleVector = [1, -2, 3, -1];
$softmaxResult = softmax($arrSampleVector);
print_r($softmaxResult);
```
**Result:**
```
Array
(
    [0] => 0.11662924976067
    [1] => 0.0058066284315271
    [2] => 0.86178006925777
    [3] => 0.015784052550034
)
```
