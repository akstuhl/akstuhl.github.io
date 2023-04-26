---
layout: page
title: Radio automation
permalink: radio_automation/index.html
published: true
---

## A timeline and bibliography

[mark things as open/closed access, or only include open access; or "include paywalled links" is a toggle]

[25 Hz link/note]

[show only: DH/min view]
Items with citation data are each hyperlinked to a single-entry page for convenience of importing with a citation manager like Zotero.

- Russo cite for tape carts?
- IBM logging system (Razlogova cite)?
- 1953 Tinkham paper
- 1954 Broadcasting on Vandivere
- 1955 NAB
- Vandivere paper

<table>
<tbody>
{% for item in site.radio_automation %}
  <tr>
    <td>
      <a href="{{ item.url }}">
        {{ item.date | date: "%Y" }}
      </a>
    </td>
    <td>
      {{ item.content }}
      {% if item.source_url %}
      <p>
        <a target="_blank" href="{{ item.source_url }}">
          {{ item.item_type }}
          {% if item.library_catalog %}
            via {{ item.library_catalog }}
          {% endif %}
        </a>
      </p>
      {% endif %}
    </td>
  </tr>
{% endfor %}
</tbody>
</table>
