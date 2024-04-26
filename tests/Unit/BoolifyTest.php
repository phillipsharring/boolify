<?php

declare(strict_types=1);

describe('Boolify Booleans', function () {
    it('makes true true', function () {
        $result = Phdc\Boolify\Boolify::cast(true);
        expect($result)->toBeTrue();
    });

    it('makes false false', function () {
        $result = Phdc\Boolify\Boolify::cast(false);
        expect($result)->toBeFalse();
    });
});

describe('Boolify Strings, True', function () {
    it('makes the string "true" true', function () {
        $result = Phdc\Boolify\Boolify::cast('true');
        expect($result)->toBeTrue();
    });

    it('makes the string "t" true', function () {
        $result = Phdc\Boolify\Boolify::cast('t');
        expect($result)->toBeTrue();
    });

    it('makes the string "1" true', function () {
        $result = Phdc\Boolify\Boolify::cast('1');
        expect($result)->toBeTrue();
    });

    it('makes the string "yes" true', function () {
        $result = Phdc\Boolify\Boolify::cast('yes');
        expect($result)->toBeTrue();
    });

    it('makes the string "y" true', function () {
        $result = Phdc\Boolify\Boolify::cast('y');
        expect($result)->toBeTrue();
    });
});

describe('Boolify Strings, False', function () {
    it('makes the string "false" false', function () {
        $result = Phdc\Boolify\Boolify::cast('false');
        expect($result)->toBeFalse();
    });

    it('makes the string "f" false', function () {
        $result = Phdc\Boolify\Boolify::cast('f');
        expect($result)->toBeFalse();
    });

    it('makes the string "0" false', function () {
        $result = Phdc\Boolify\Boolify::cast('0');
        expect($result)->toBeFalse();
    });

    it('makes the string "no" false', function () {
        $result = Phdc\Boolify\Boolify::cast('no');
        expect($result)->toBeFalse();
    });

    it('makes the string "n" false', function () {
        $result = Phdc\Boolify\Boolify::cast('n');
        expect($result)->toBeFalse();
    });

    it('makes the string "n/a" false', function () {
        $result = Phdc\Boolify\Boolify::cast('n/a');
        expect($result)->toBeFalse();
    });
});

describe('Boolify Integes', function () {
    it('makes integers > 0 true', function () {
        $result = Phdc\Boolify\Boolify::cast(1);
        expect($result)->toBeTrue();
    });

    it('makes integers <= 0 false', function () {
        $result = Phdc\Boolify\Boolify::cast(-1);
        expect($result)->toBeFalse();
    });
});

describe('Boolify Arrays', function () {
    it('makes a non-empty array true', function () {
        $result = Phdc\Boolify\Boolify::cast(['foo', 'bar']);
        expect($result)->toBeTrue();
    });

    it('makes an empty array false', function () {
        $result = Phdc\Boolify\Boolify::cast([]);
        expect($result)->toBeFalse();
    });
});

describe('Boolify Objects', function () {
    it('makes a non-empty object true', function () {
        $obj = new stdClass();
        $obj->foo = 'bar';

        $result = Phdc\Boolify\Boolify::cast($obj);
        expect($result)->toBeTrue();
    });

    it('makes an empty object false', function () {
        $obj = new stdClass();
        $result = Phdc\Boolify\Boolify::cast($obj);
        expect($result)->toBeFalse();
    });
});

describe('Boolify null', function () {
    it('makes a null false', function () {
        $result = Phdc\Boolify\Boolify::cast(null);
        expect($result)->toBeFalse();
    });
});
