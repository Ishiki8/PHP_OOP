<?php
namespace task30;

class Url {
    private array $url;

    public function __construct(string $url) {
        $this->url = parse_url($url);
    }

    public function getScheme(): ?string {
        return $this->url['scheme'] ?? null;
    }

    public function getHostName(): ?string {
        return $this->url['host'] ?? null;
    }

    public function getQueryParams(): ?array {
        parse_str($this->url['query'] ?? '', $queryParams);
        return $queryParams;
    }

    public function getQueryParam(string $name, ?string $default = null): ?string {
        return $this->getQueryParams()[$name] ?? $default;
    }

    public function equals(Url $url): bool {
        return $this == $url;
    }
}