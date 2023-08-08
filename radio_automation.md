---
layout: page
title: A radio automation timeline
permalink: radio_automation/index.html
published: true
---

This timeline/bibliography gathers some primary sources relevant to the history of automation in American broadcast radio, including cultural works that depicted or responded to radio automation. If you know of something that belongs in this list, I'd love to hear about it: [andykstuhl@gmail.com](mailto::andykstuhl@gmail.com)

<table class="timeline">
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
      <p>
      {% if item.source_url and item.source_url != "undefined" %}
        <a target="_blank" href="{{ item.source_url }}">
      {% endif %}
          {{ item.item_type }}
          {% if item.library_catalog %}
            via {{ item.library_catalog }}
          {% endif %}
      {% if item.source_url and item.source_url != "undefined" %}
        </a>
      {% endif %}
      </p>
    </td>
  </tr>
{% endfor %}
</tbody>
</table>

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
